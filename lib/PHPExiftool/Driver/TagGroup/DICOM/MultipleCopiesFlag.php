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
class MultipleCopiesFlag extends AbstractTagGroup
{
    protected string $id = 'DICOM:MultipleCopiesFlag';

    protected string $name = 'MultipleCopiesFlag';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Multiple Copies Flag',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DICOM::Main
             * line : 73140
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:MultipleCopiesFlag',
            'desc' => [
                'en' => 'Multiple Copies Flag',
            ],
        ],
    ];

    protected int $count = 0;
}
