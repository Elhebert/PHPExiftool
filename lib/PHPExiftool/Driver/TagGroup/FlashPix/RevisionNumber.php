<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\FlashPix;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class RevisionNumber extends AbstractTagGroup
{
    protected string $id = 'FlashPix:RevisionNumber';

    protected string $name = 'RevisionNumber';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Revision Number',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : FlashPix::DataObject
             * line : 86894
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'FlashPix::DataObject.FlashPix:RevisionNumber',
            'desc' => [
                'en' => 'Revision Number',
            ],
        ],
        1 => [
            /**
             * table_name : FlashPix::SummaryInfo
             * line : 88300
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'FlashPix::SummaryInfo.FlashPix:RevisionNumber',
            'desc' => [
                'en' => 'Revision Number',
            ],
        ],
        2 => [
            /**
             * table_name : FlashPix::Transform
             * line : 88378
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'FlashPix::Transform.FlashPix:RevisionNumber',
            'desc' => [
                'en' => 'Revision Number',
            ],
        ],
    ];

    protected int $count = 0;
}
