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
class TransformedImageTitle extends AbstractTagGroup
{
    protected string $id = 'FlashPix:TransformedImageTitle';

    protected string $name = 'TransformedImageTitle';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Transformed Image Title',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : FlashPix::GlobalInfo
             * line : 87103
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'FlashPix::GlobalInfo.FlashPix:TransformedImageTitle',
            'desc' => [
                'en' => 'Transformed Image Title',
            ],
        ],
    ];

    protected int $count = 0;
}
