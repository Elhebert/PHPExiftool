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
class DiffusionBValueYZ extends AbstractTagGroup
{
    protected string $id = 'DICOM:DiffusionBValueYZ';

    protected string $name = 'DiffusionBValueYZ';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Diffusion B Value YZ',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DICOM::Main
             * line : 70702
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:DiffusionBValueYZ',
            'desc' => [
                'en' => 'Diffusion B Value YZ',
            ],
        ],
    ];

    protected int $count = 0;
}
