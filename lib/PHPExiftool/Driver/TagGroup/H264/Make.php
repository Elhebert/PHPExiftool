<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\H264;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Make extends AbstractTagGroup
{
    protected string $id = 'H264:Make';

    protected string $name = 'Make';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Make',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : H264::MakeModel
             * line : 98338
             * type : int16u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'H264::MakeModel.H264:Make',
            'desc' => [
                'en' => 'Make',
            ],
        ],
    ];

    protected int $count = 0;
}
