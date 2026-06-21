<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laporan Mutasi Poin - {{ $user->nama }}</title>
    <style>
        body {
            font-family: 'Helvetica', Arial, sans-serif;
            font-size: 12px;
            color: #333333;
            line-height: 1.5;
        }
        .header {
            text-align: center;
            margin-bottom: 30px;
            border-bottom: 2px solid #15803D;
            padding-bottom: 10px;
        }
        .header h2 {
            color: #15803D;
            margin: 0;
            font-size: 20px;
        }
        .header p {
            margin: 4px 0 0 0;
            color: #666;
            font-size: 11px;
        }
        .info-table {
            width: 100%;
            margin-bottom: 20px;
        }
        .info-table td {
            padding: 3px 0;
        }
        .data-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }
        .data-table th {
            background-color: #EBF5EE;
            color: #15803D;
            font-weight: bold;
            text-align: left;
            padding: 10px;
            border: 1px solid #ddd;
            text-transform: uppercase;
            font-size: 10px;
        }
        .data-table td {
            padding: 10px;
            border: 1px solid #eee;
            vertical-align: top;
        }
        .text-right {
            text-align: right;
        }
        .text-masuk {
            color: #15803D;
            font-weight: bold;
        }
        .text-keluar {
            color: #EF4444;
            font-weight: bold;
        }
        .badge {
            display: inline-block;
            padding: 2px 6px;
            background-color: #E2E8F0;
            color: #475569;
            border-radius: 4px;
            font-size: 9px;
            font-weight: bold;
            text-transform: uppercase;
        }
    </style>
</head>
<body>

    <div class="header">
        <h2>POINTWASTE INDONESIA</h2>
        <p>Laporan Transaksi dan Riwayat Mutasi Poin Tabungan Sampah Mandiri Warga</p>
    </div>

    <table class="info-table">
        <tr>
            <td style="width: 15%;"><strong>Nama Warga</strong></td>
            <td style="width: 35%;">: {{ $user->nama }}</td>
            <td style="width: 20%;"><strong>Total Poin Saat Ini</strong></td>
            <td style="width: 30%;">: <strong>{{ number_format($totalPoinSaatIni, 0, ',', '.') }} Poin</strong></td>
        </tr>
        <tr>
            <td><strong>Email</strong></td>
            <td>: {{ $user->email }}</td>
            <td><strong>Tanggal Cetak</strong></td>
            <td>: {{ now()->translatedFormat('d F Y H:i') }}</td>
        </tr>
    </table>

    <table class="data-table">
        <thead>
            <tr>
                <th style="width: 20%;">Tanggal</th>
                <th style="width: 45%;">Keterangan / Deskripsi</th>
                <th style="width: 15%;">Kategori</th>
                <th style="width: 20%; text-align: right;">Jumlah (Poin)</th>
            </tr>
        </thead>
        <tbody>
            @forelse($riwayatMutasi as $mutasi)
                <tr>
                    <td>{{ $mutasi->tanggal ? $mutasi->tanggal->translatedFormat('d M Y, H:i') : '-' }}</td>
                    <td>
                        <strong>{{ $mutasi->keterangan }}</strong>
                        @if($mutasi->deskripsi_tambahan)
                            <br><span style="color: #888; font-size: 10px;">{{ $mutasi->deskripsi_tambahan }}</span>
                        @endif
                    </td>
                    <td><span class="badge">{{ $mutasi->kategori }}</span></td>
                    <td class="text-right {{ $mutasi->jenis_transaksi == 'Masuk' ? 'text-masuk' : 'text-keluar' }}">
                        {{ $mutasi->jenis_transaksi == 'Masuk' ? '+' : '-' }}{{ number_format($mutasi->nominal_poin, 0, ',', '.') }}
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" style="text-align: center; color: #999; padding: 20px;">
                        Belum ada riwayat transaksi mutasi poin.
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>

</body>
</html>