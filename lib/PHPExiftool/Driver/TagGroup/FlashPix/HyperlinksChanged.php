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
class HyperlinksChanged extends AbstractTagGroup
{
    protected string $id = 'FlashPix:HyperlinksChanged';

    protected string $name = 'HyperlinksChanged';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Hyperlinks Changed',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : FlashPix::DocumentInfo
             * line : 87016
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'FlashPix::DocumentInfo.FlashPix:HyperlinksChanged',
            'desc' => [
                'en' => 'Hyperlinks Changed',
            ],
        ],
    ];

    protected int $count = 0;
}
