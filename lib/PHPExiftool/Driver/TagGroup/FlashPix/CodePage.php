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
class CodePage extends AbstractTagGroup
{
    protected string $id = 'FlashPix:CodePage';

    protected string $name = 'CodePage';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Code Page',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : FlashPix::SummaryInfo
             * line : 87818
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'FlashPix::SummaryInfo.FlashPix:CodePage',
            'desc' => [
                'en' => 'Code Page',
            ],
        ],
    ];

    protected int $count = 0;
}
