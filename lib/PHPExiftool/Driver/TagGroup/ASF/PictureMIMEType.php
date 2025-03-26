<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\ASF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class PictureMIMEType extends AbstractTagGroup
{
    protected string $id = 'ASF:PictureMIMEType';

    protected string $name = 'PictureMIMEType';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Picture MIME Type',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : ASF::Picture
             * line : 1049
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'ASF::Picture.ASF:PictureMIMEType',
            'desc' => [
                'en' => 'Picture MIME Type',
            ],
        ],
    ];

    protected int $count = 0;
}
