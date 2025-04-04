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
class SaveCompInstancesAfterMediaCreate extends AbstractTagGroup
{
    protected string $id = 'DICOM:SaveCompInstancesAfterMediaCreate';

    protected string $name = 'SaveCompInstancesAfterMediaCreate';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Save Comp Instances After Media Create',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DICOM::Main
             * line : 75450
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:SaveCompInstancesAfterMediaCreate',
            'desc' => [
                'en' => 'Save Comp Instances After Media Create',
            ],
        ],
    ];

    protected int $count = 0;
}
