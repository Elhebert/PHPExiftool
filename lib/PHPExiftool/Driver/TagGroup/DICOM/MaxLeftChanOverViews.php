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
class MaxLeftChanOverViews extends AbstractTagGroup
{
    protected string $id = 'DICOM:MaxLeftChanOverViews';

    protected string $name = 'MaxLeftChanOverViews';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Max Left Chan Over Views',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DICOM::Main
             * line : 70939
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:MaxLeftChanOverViews',
            'desc' => [
                'en' => 'Max Left Chan Over Views',
            ],
        ],
    ];

    protected int $count = 0;
}
