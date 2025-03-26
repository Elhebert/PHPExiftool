<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\HTTP_equiv;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class SetCookie extends AbstractTagGroup
{
    protected string $id = 'HTTP-equiv:SetCookie';

    protected string $name = 'SetCookie';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Set Cookie',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : HTML::equiv
             * line : 98697
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'HTML::equiv.HTTP-equiv:SetCookie',
            'desc' => [
                'en' => 'Set Cookie',
            ],
        ],
    ];

    protected int $count = 0;
}
