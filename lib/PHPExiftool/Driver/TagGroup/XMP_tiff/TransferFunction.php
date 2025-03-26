<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_tiff;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class TransferFunction extends AbstractTagGroup
{
    protected string $id = 'XMP-tiff:TransferFunction';

    protected string $name = 'TransferFunction';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Transfer Function',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::tiff
             * line : 290834
             * type : integer
             * writable : true
             * count :
             * flags : list,seq
             */
            'id' => 'XMP::tiff.XMP-tiff:TransferFunction',
            'desc' => [
                'en' => 'Transfer Function',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2624;
}
