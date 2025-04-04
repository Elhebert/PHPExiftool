<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\DICOM;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class LightPathFilterPassBand extends AbstractTagGroup
{
    protected string $id = 'DICOM:LightPathFilterPassBand';

    protected string $name = 'LightPathFilterPassBand';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Light Path Filter Pass Band',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DICOM::Main
             * line : 71635
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:LightPathFilterPassBand',
            'desc' => [
                'en' => 'Light Path Filter Pass Band',
            ],
        ],
    ];

    protected int $count = 0;
}
